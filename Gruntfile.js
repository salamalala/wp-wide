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

        postcss: {
            options: {
                map: true, // inline sourcemaps


                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                files: {
                    'assets/dist/css/main-min.css'    : 'assets/src/css/*.css'
                }
            }
        },

        watch: {
            sass: {
                files: ['**/*.scss'],
                tasks: ['sass', 'postcss']

            }
        }
    });


    require('load-grunt-tasks')(grunt);


    grunt.registerTask('default', ['sass:dist', 'postcss', 'watch']);

};
