module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
			combine: {
				files: {
					'public/css/style.min.css': [
						'public/css/bootstrap.min.css',
						'public/css/font-awesome.min.css',
						'public/css/loader.css',
						'public/css/style.css',
						'public/css/responsive.css',
						'public/css/slick.css',
					]
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('css', ['cssmin']);
};