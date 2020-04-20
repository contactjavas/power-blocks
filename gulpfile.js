const { src, dest, watch, parallel, series } = require('gulp');
const concat = require('gulp-concat');
const plumber = require('gulp-plumber');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();
const manifest = require('./manifest.json');
const config = manifest.config;

function bundleEditorJS(cb) {
	return src(['src/js/editor.js', 'blocks/*/editor.js'])
		.pipe(plumber())
		.pipe(concat('editor.min.js'))
		.pipe(babel({
			presets: ['@babel/preset-env', '@babel/preset-react']
		}))
		.pipe(uglify())
		.pipe(dest('assets/js'))
		.pipe(browserSync.reload({ stream: true }));

	cb();
}

function bundleBlocksJS(cb) {
	return src(['src/js/blocks.js', 'blocks/*/block.js'])
		.pipe(plumber())
		.pipe(concat('blocks.min.js'))
		.pipe(babel({
			presets: ['@babel/preset-env', '@babel/preset-react']
		}))
		.pipe(uglify())
		.pipe(dest('assets/js'))
		.pipe(browserSync.reload({ stream: true }));

	cb();
}

function bundleEditorSCSS(cb) {
	return src(['src/scss/editor.scss'])
		.pipe(sass({ outputStyle: 'compressed' }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(dest('assets/css'))
		.pipe(browserSync.stream());

	cb();
}

function bundleBlocksSCSS(cb) {
	return src(['src/scss/blocks.scss'])
		.pipe(sass({ outputStyle: 'compressed' }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(dest('assets/css'))
		.pipe(browserSync.stream());

	cb();
}

function serveBrowserSync(cb) {
	browserSync.init({
		proxy: config.url,
		host: config.host,
		notify: true,
	});

	cb();
}

function reloadPage(cb) {
	browserSync.reload();
	cb();
}

function watchChanges(cb) {
	watch(['src/js/editor.js', 'blocks/*/editor.js'], parallel(bundleEditorJS));
	watch(['src/js/blocks.js', 'blocks/*/block.js'], parallel(bundleBlocksJS));
	watch(['src/js/editor.scss', 'blocks/*/editor.scss'], parallel(bundleEditorSCSS));
	watch(['src/js/blocks.scss', 'blocks/*/block.scss'], parallel(bundleBlocksSCSS));
	watch('**/*.php', parallel(reloadPage));

	cb();
}

exports.default = parallel(serveBrowserSync, watchChanges);
