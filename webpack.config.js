const path = require('path');

module.exports = {
    mode : 'development',
    entry : {
        index_page : "./js/src/index"
    },
    output: {
        path : path.resolve(__dirname, "./js/dist"),
        filename : '[name].js'
    }
}