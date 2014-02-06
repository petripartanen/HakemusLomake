module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cssmin: {
            tmp:  {
                expand: true,
                cwd: 'tmp/css',
                src: '*.css',
                dest: 'tmp/css',
                ext: '.min.css'
            }
        },
        sass: {
            dist: {
                files: [{
                    expand: true,
                    cwd: 'src/My/Resources/public/sass/',
                    src: ['*.scss'],
                    dest: 'tmp/css',
                    ext: '.css'
                }]
            }
        },
        copy: {
            tmp: {
                expand: true,
                cwd: 'src/My/Resources/public/css/',
                src: ['*.css','!*.min.css'],
                dest: 'tmp/css',
                flatten: true,
                filter: 'isFile'
            },
            thirdParty: {
                expand: true,
                cwd: 'src/My/Resources/public/css/',
                src: '*.min.css',
                dest: 'web/css',
                flatten: true,
                filter: 'isFile'
            }
        },
        concat: {
            tmpToDist: {
                src: 'tmp/css/*.min.css',
                dest: 'web/css/styles.min.css'
            }
        },
        clean: {
            tmp: "tmp",
            dist: "web/css"
        }
    });

    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');

    // Default task(s).
    grunt.registerTask('default', ['clean:dist', 'sass', 'copy:tmp', 'cssmin:tmp', 'concat:tmpToDist', 'copy:thirdParty', "clean:tmp"]);

};