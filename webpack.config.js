const path = require('path');

module.exports = {
    mode : 'development',
    entry : {
        index_page : "./js/src/index_page_entry"
    },
    output: {
        path : path.resolve(__dirname, "./js/dist"),
        filename : '[name].js'
    },
    module:{
        rules:[
            {
                test:/\.css$/,
                use:['style-loader','css-loader']
            }
       ]
    }
}