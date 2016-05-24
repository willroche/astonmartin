/*
 * grunt-heyday-less
 * https://github.com/heyday/grunt-heyday-less
 *
 * Copyright (c) 2013 Heyday
 * Licensed under the MIT license.
 */

module.exports = function( grunt ) {
	'use strict';

	var config = grunt.config;

	config.set( 'less.style', {
		options: {

			// Possible less include file paths
			paths: [
				'<%= dirs.src %>css/less',
				'<%= dirs.libs %>'
			]
		},
		src: '<%= dirs.src %>css/less/style.less',
		dest: '<%= dirs.src %>css/style.css'
	} );

	config.set( 'cssmin.build', {
		src: '<%= dirs.build %>css/style.css',
		dest: '<%= dirs.build %>css/style.css'
	} );

	config.set( 'imageEmbed.build', {
		options: {
			deleteAfterEncoding: false,
			maxImageSize: 1024 * 4 // 4kb
		},
		src: '<%= dirs.build %>css/style.css',
		dest: '<%= dirs.build %>css/style.css'
	} );

	config.set( 'watch.less', {
		files: '<%= dirs.src %>css/less/**/*.less',
		tasks: ['less'],
		options: {
			interrupt: true
		}
	} );

	config.set( 'copy.cssToBuild', {
		expand: true,
		cwd: '<%= dirs.src %>css',

		src: '*.{css,htc}',
		dest: '<%= dirs.build %>css/'
	} );

	grunt.registerTask( 'local-build:less', ['less', 'copy:cssToBuild', 'imageEmbed:build', 'cssmin:build'] );
	grunt.registerTask( 'local-build-dev:less', ['less', 'copy:cssToBuild'] );
};
