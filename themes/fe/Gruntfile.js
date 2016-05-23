module.exports = function( grunt ) {
	'use strict';

	// Initialise environment vars
	grunt.config.init( {
		dirs: {
			src: 'source/',
			build: '_build/',
			production: 'production/',
			libs: 'vendor/'
		},

		tasks: [
			'images',
			'fonts',
			'less',
			'js'
		]
	} );

	// load all grunt npm tasks
	require( 'minimatch' )
		.match( require( 'fs' ).readdirSync( './node_modules' ), 'grunt-*', {} )
		.forEach( grunt.loadNpmTasks );

	grunt.loadTasks( 'tasks' );

	grunt.config.set( 'copy.imagesToBuild', {
		expand: true,
		cwd: '<%= dirs.src %>images',

		src: '**/*.{gif,png,jpg,jpeg}',
		dest: '<%= dirs.build %>images/'
	} );

	grunt.registerTask( 'local-build-dev:images', ['copy:imagesToBuild'] );
	grunt.registerTask( 'local-build:images', ['copy:imagesToBuild'] );

	grunt.registerTask( 'local-build:less', ['less', 'copy:cssToBuild', 'cssmin:build'] );
};
