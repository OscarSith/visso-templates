module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
			combine: {
				files: {
					'public/css/style.min.css': [
						'public/css/bootstrap.min.css',
						'public/css/font-awesome.min.css',
						'public/css/loader.css',
						'public/css/responsive.css',
						'bower_components/wow/css/libs/animate.css',
						'public/css/slick.css',
						'public/css/slick-theme.css',
						'public/css/style.css',
					]
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('css', ['cssmin']);
};