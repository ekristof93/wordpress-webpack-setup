"use strict";

const path = require("path");
const settings = require("./settings");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
  mode: "development",
  //devtool: "source-map",
  entry: "./assets/js/App.js",
  output: {
    filename: "./js/bundled.js",
    path: path.resolve(__dirname, "assets"),
  },
  module: {
    rules: [
      {
        test: /\.(s(a|c)ss)$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [
                  [
                    "autoprefixer",
                    {
                      // options
                    },
                  ],
                ],
              },
            },
          },
          "sass-loader",
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "../style.css",
    }),
    new BrowserSyncPlugin({
      files: "**/*.php",
      notify: false,
      injectChanges: true,
      proxy: settings.urlToPreview,
    }),
  ],
};
