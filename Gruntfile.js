module.exports = function(grunt) {
    grunt.initConfig({
        copy: {
            font_awesome: {
                    expand: true,
                    flatten: true,
                    src: ['bower_components/font-awesome/fonts/*'],
                    dest: 'fonts'                                                                        }
                }
            });
}
