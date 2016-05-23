/*
 * grunt-heyday-js
 * https://github.com/heyday/grunt-heyday-js
 *
 * Copyright (c) 2013 Heyday
 * Licensed under the MIT license.
 */

module.exports = function( grunt ) {
	'use strict';
	var config = grunt.config;

	grunt.task.registerTask('forceNodeEnv', 'Force a specific NODE_ENV', function( env ) {
		process.env.NODE_ENV = env;
	});

	config.set( 'browserify', {
		options: {
			debug: true,
			transform: [ 'reactify', 'deamdify', 'envify' ],
			ignore: [ 'env' ]
		}
	} );

	config.set( 'browserify.head-dev', {
		src: [
			'<%= dirs.src %>js/head/init.js'
		],
		dest: '<%= dirs.src %>js/head.js',
		options: {
			debug: true,
			transform: [ 'reactify', 'deamdify', 'envify' ],
			ignore: [ 'env' ],
			aliasMappings: [
				{
					cwd: '<%= dirs.src %>js',
					src: [ 'head/*' ]
				}
			]
		}
	} );

	config.set( 'browserify.global-dev', {
		src: [
			'<%= dirs.src %>js/common/init.js',
			'<%= dirs.src %>js/global/init.js'
		],
		dest: '<%= dirs.src %>js/global.js',
		options: {
			debug: true,
			transform: [ 'reactify', 'deamdify', 'envify' ],
			ignore: [ 'env' ],
			external: [
				'<%= dirs.src %>js/head/**/*'
			],
			aliasMappings: [
				{
					cwd: '<%= dirs.src %>js',
					src: [ 'head/*', 'common/*' ]
				}
			]
		}
	} );

	config.set( 'browserify.head', {
		src: [
			'<%= dirs.src %>js/head/init.js'
		],
		dest: '<%= dirs.build %>js/head.js',
		options: {
			transform: [ 'reactify', 'deamdify', 'envify' ],
			ignore: [ 'env' ],
			aliasMappings: [
				{
					cwd: '<%= dirs.src %>js',
					src: [ 'head/*' ]
				}
			]
		}
	} );

	config.set( 'browserify.global', {
		src: [
			'<%= dirs.src %>js/common/init.js',
			'<%= dirs.src %>js/global/init.js'
		],
		dest: '<%= dirs.build %>js/global.js',
		options: {
			transform: [ 'reactify', 'deamdify', 'envify' ],
			ignore: [ 'env' ],
			external: [
				'<%= dirs.src %>js/head/**/*'
			],
			aliasMappings: [
				{
					cwd: '<%= dirs.src %>js',
					src: [ 'head/*', 'common/*' ]
				}
			]
		}
	} );

	config.set( 'copy.head', {
		src: '<%= dirs.src %>js/head.js',
		dest: '<%= dirs.build %>js/head.js'
	} );

	config.set( 'copy.global', {
		src: '<%= dirs.src %>js/global.js',
		dest: '<%= dirs.build %>js/global.js'
	} );

	config.set( 'uglify.head', {
		options: {
			preserveComments: 'some'
		},
		src: '<%= dirs.build %>js/head.js',
		dest: '<%= dirs.build %>js/head.js'
	} );

	config.set( 'uglify.global', {
		options: {
			preserveComments: 'some'
		},
		src: '<%= dirs.build %>js/global.js',
		dest: '<%= dirs.build %>js/global.js'
	} );

	config.set( 'watch.js', {
		files: '<%= dirs.src %>js/global/**/*.js',
		tasks: [ 'forceNodeEnv:development', 'browserify:global-dev', 'browserify:head-dev' ],
		options: {
			interrupt: true
		}
	} );

	grunt.registerTask( 'local-build-dev:js', [ 'forceNodeEnv:development', 'browserify:head-dev', 'browserify:global-dev', 'copy:head', 'copy:global' ] );
	grunt.registerTask( 'local-build:js', [ 'forceNodeEnv:production', 'browserify:head', 'browserify:global', 'uglify' ] );
};
