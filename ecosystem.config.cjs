module.exports = {
    apps: [
        {
            name: "vite",
            script: "npm",
            args: "run dev",
            watch: true,
            ignore_watch: ["node_modules", "public/build"],
            env: {
                NODE_ENV: "development",
            },
        },
    ],
};
