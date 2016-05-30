module.exports = function (grunt) {

    grunt.initConfig({
        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'assets/src/css/main.css': 'assets/src/css/sass/main.scss'
                }
            }
        },

        watch: {
            sass: {
                files: ['**/*.scss'],
                tasks: ['sass']

            }
        }
    });


    require('load-grunt-tasks')(grunt);


    grunt.registerTask('default', ['sass:dist', 'watch']);

};
