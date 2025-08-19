/* === Config === */

const ENTRY_POINTS = {
    app: "resource/js/app.js",
    style: "resource/scss/style.scss",
};

const OUT_DIR = "resource/dist";
const PUBLIC_PATH = "/resource/dist";

/* === Bootstrap === */

const esbuild = require("esbuild");
const { sassPlugin } = require("esbuild-sass-plugin");

const args = process.argv.slice(2);
const isWatch = args.includes("--watch");

const reporter = {
    name: "pretty-diagnostics",
    setup(build) {
        let start = 0;
        let isFirst = true;
        const now = () => new Date().toLocaleTimeString();

        build.onStart(() => {
            start = Date.now();
            console.log(
                isFirst
                    ? `\n🔧 [${now()}] Initial build started...`
                    : `\n🔁 [${now()}] Rebuild started...`
            );
        });

        build.onEnd(async (result) => {
            const ms = Date.now() - start;
            const { errors = [], warnings = [], metafile } = result;

            // 보기 좋은 메시지로 포맷 (코드 프레임 포함, 컬러 on)
            if (warnings.length) {
                const msgs = await esbuild.formatMessages(warnings, {
                    kind: "warning",
                    color: true,
                    terminalWidth: process.stdout.columns || 80,
                });
                console.warn("\n⚠️  Warnings:");
                console.warn(msgs.join("\n"));
            }

            if (errors.length) {
                const msgs = await esbuild.formatMessages(errors, {
                    kind: "error",
                    color: true,
                    terminalWidth: process.stdout.columns || 80,
                });
                console.error("\n❌ Errors:");
                console.error(msgs.join("\n"));
            }

            const status = errors.length
                ? "❌ Build failed"
                : isFirst
                ? "✅ Build done"
                : "✅ Rebuild done";

            const outCount = metafile
                ? Object.keys(metafile.outputs).length
                : 0;
            console.log(
                `${status} in ${ms} ms • ${errors.length} errors, ${warnings.length} warnings` +
                    (outCount ? ` • ${outCount} outputs` : "")
            );

            isFirst = false;
        });
    },
};

(async () => {
    const ctx = await esbuild.context({
        entryPoints: ENTRY_POINTS,
        entryNames: "[name]",
        chunkNames: "[name]",
        bundle: true,
        outdir: OUT_DIR,
        plugins: [sassPlugin(), reporter],
        loader: {
            ".woff": "file",
            ".woff2": "file",
            ".jpg": "file",
            ".jpeg": "file",
            ".png": "file",
            ".gif": "file",
            ".svg": "file",
        },
        assetNames: "assets/[name]-[hash]", 
        external: [
            "/resource/images/*",
            "/resource/fonts/*",
        ],
        publicPath: PUBLIC_PATH,
        sourcemap: true,
        minify: true,
        metafile: true,
        logLevel: "silent",
    });

    if (isWatch) {
        await ctx.watch();
        console.log("👀 Watching for changes... (Ctrl+C to stop)");
    } else {
        await ctx.rebuild();
        await ctx.dispose();
    }
})();
