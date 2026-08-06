const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const DependencyExtractionWebpackPlugin =
    require("@wordpress/dependency-extraction-webpack-plugin");

const JS_DIR = path.resolve(__dirname, "src/js");
const LIB_DIR = path.resolve(__dirname, "src/library");
const BUILD_DIR = path.resolve(__dirname, "build");

module.exports = (env, argv) => {

    const isProduction = argv.mode === "production";

    return {

        mode: isProduction ? "production" : "development",

        entry: {
            main: "./src/js/main.js",
            single: "./src/js/single.js",
            editor: "./src/js/editor.js",
            blocks: "./src/js/blocks.js",
            author: "./src/js/author.js",
            search: "./src/js/search.js",
        },

        output: {
            path: BUILD_DIR,
            filename: "js/[name].js",
            clean: true,
        },

        devtool: isProduction
            ? "source-map"
            : "eval-source-map",

        module: {
            rules: [

                {
                    test: /\.js$/,
                    include: JS_DIR,
                    exclude: /node_modules/,
                    use: "babel-loader",
                },

                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        "css-loader",
                        "sass-loader",
                    ],
                },

                {
                    test: /\.(png|jpe?g|gif|svg|ico)$/i,
                    type: "asset/resource",
                    generator: {
                        filename: "img/[name][ext]"
                    }
                },

                {
                    test: /\.(woff2?|eot|ttf|otf)$/i,
                    type: "asset/resource",
                    generator: {
                        filename: "fonts/[name][ext]"
                    }
                }

            ]
        },

        optimization: {

            minimize: isProduction,

            minimizer: [
                "...",
                new CssMinimizerPlugin()
            ]
        },

        plugins: [

            new MiniCssExtractPlugin({
                filename: "css/[name].css",
            }),

            new CopyPlugin({
                patterns: [
                    {
                        from: LIB_DIR,
                        to: BUILD_DIR + "/library",
                    },
                ],
            }),

            new DependencyExtractionWebpackPlugin({
                injectPolyfill: true,
                combineAssets: true,
            }),
        ],

        externals: {
            jquery: "jQuery",
        },
    };
};