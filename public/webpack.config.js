const path = require("path");

module.exports = {
    mode: "development",
    entry: "./src/ts/app.ts",
    watch: true,
    output: {
        filename: "bundle.js",
        path: path.resolve(__dirname, "dist/js"),
        publicPath: "dist",
    },
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                use: "ts-loader",
                exclude: /node_modules/,
            },
        ],
    },
    resolve: {
        extensions: [".ts", ".js"]
    }
};
