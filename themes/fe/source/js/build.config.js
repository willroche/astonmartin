var AMD_STUB;

AMD_STUB = 'define({});';

module.exports = {

	/**
	 * Modules config
	 *
	 * There should be a module listed here for each built file
	 * See: https://github.com/jrburke/r.js/blob/master/build/example.build.js#L334-L403
	 *
	 * @property {Object[]} modules
	 *  @property {String} modules.name        AMD module name, first file to scan for dependencies
	 *  @property {String[]} [modules.include] AMD module names to include in this file
	 *  @property {String[]} [modules.exclude] AMD module names to exclude from this file (module dependencies
	 *    will be excluded as well)
	 */
	modules: [

		// Head module
		{
			name: 'head'
		},

		// Common module
		// All commonly used modules should be included in this module
		{
			name: 'common',
			include: [
				'poly',
				'jquery'
			],
			exclude: [
				'head'
			]
		},

		// Global module
		{
			name: 'global',
			exclude: [
				'head',
				'common'
			]
		}
	],

	/**
	 * Raw text config
	 *
	 * Inject JS that may not exist on disk into the build environment.
	 * Useful for defining modules that are injected inline in templates
	 *
	 * See: https://github.com/jrburke/r.js/blob/master/build/example.build.js#L541-L547
	 */
	rawText: {
		'env': AMD_STUB
	}

};