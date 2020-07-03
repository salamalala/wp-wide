module.exports = function (grunt) {

    grunt.initConfig({

        uglify: {
            my_target: {
              files: {
                'assets/dist/js/main-min.js': ['assets/src/js/main.js']
              }
            }
        },

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
                    require('autoprefixer'), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                files: {
                    'assets/dist/css/main-min.css': 'assets/src/css/main.css'
                }
            }
        },

        browserSync: {
          dev: {
            bsFiles: {
              src : ['assets/dist/**/*.css', 'assets/dist/**/*.js', '*.php']
            },
            options: {
              proxy: "wide.local",
              watchTask: true,
            }
          }
        },

        watch: {
            js: {
                files: ['assets/src/js/*.js'],
                tasks: ['uglify'],
            },
            sass: {
                files: ['**/*.scss'],
                tasks: ['sass', 'postcss']

            }
        }
    });


    require('load-grunt-tasks')(grunt);


    grunt.registerTask('default', ['newer:uglify', 'newer:sass:dist', 'newer:postcss', 'browserSync', 'watch']);

};
