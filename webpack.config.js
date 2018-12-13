const webpack = require('webpack');
const path = require('path');

const config = {
	entry: "./assets/src/js/main.js",
	output: {
		path: path.resolve(__dirname, './assets/dist/js'),
		filename: 'bundle.js',
	},
	module : {
		rules : [
			{
				test: /\.css$/,
				use : [
					{ loader: 'style-loader' },
					{ loader: 'css-loader' }
				]
			},{
				test : /\.js$/,
				exclude : /(node_modules)/,
				loader : 'babel-loader',
				query : {
					presets : ['es2015']
				}
			}
		]
	},
	resolve : {
		modules : [
			path.resolve(__dirname,'./'),
			'node_modules'
		]
	},
	plugins : [
		new webpack.ProvidePlugin({
			$ : 'jquery',
			jQuery : 'jquery'
		}),
	]

}

module.exports = config;