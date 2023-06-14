const path = require('path');

const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin');
const ImageminWebpWebpackPlugin = require('imagemin-webp-webpack-plugin');

module.exports = {
  optimization: {
      minimize: true
  },
  entry: `./src/dev/scripts/index.js`,

  output: {
    clean: true,
    path: path.resolve(__dirname, './app/public/wp-content/themes/SUISYOU/common/scripts'),
    filename: "index.js"
  },

  plugins: [
    new ImageMinimizerPlugin({
      minimizer: {
          implementation: ImageMinimizerPlugin.imageminMinify,
          options: {
              plugins: [
                  ['mozjpeg', { quality: 75 }],
                  ['pngquant', { quality: [0.75, 0.75] }],
              ],
          },
      },
    }),

    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, 'src/images/'),
          to: path.resolve(__dirname, 'app/public/wp-content/themes/SUISYOU/')
        },
        {
          from: path.resolve(__dirname, 'src/dev/scripts/library'),
          to: path.resolve(__dirname, 'app/public/wp-content/themes/SUISYOU/common/scripts/library')
        }
      ],
    }),

    new ImageminWebpWebpackPlugin({
      config: [
        {
          test: /\.(png|jpe?g)$/,
          options: {
            quality: 75,
          },
        },
      ],
      overrideExtension: true,
    }),
  ],
};