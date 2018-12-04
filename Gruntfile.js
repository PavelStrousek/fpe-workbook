module.exports = function(grunt) {
    pkg: grunt.file.readJSON('package.json');

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        watch: {
            sass: {
                files: ['**/*sass'],
                tasks: ['sass']
            }
        },

        sass: {
            options: {
                sourceMap: false,
                outputStyle: 'expanded'
            },
            dist: {
                files: {
                    'assets/css/style.css': 'assets/css/sass/style.sass'
                }
            }
        },

        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')
                ]
            },
            dist: {
                src: 'assets/css/style.css'
            }
        },

        cssmin: {
            dist: {
                files: {
                    'assets/css/style.min.css': 'assets/css/style.css'
                }
            }
        },

        uglify: {
            my_target: {
                files: {
                    'assets/js/main.min.js': ['assets/js/main.js']
                }
            }
        }
    });

    //Register task
    grunt.registerTask('default', ['sass', 'postcss:dist', 'cssmin', 'uglify']);
};
