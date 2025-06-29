import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: 'assets',
  base: '', // important — relative paths
  server: {
    host: '0.0.0.0',
    port: 5173,
  },
  build: {
    outDir: '../dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, '/js/main.js'),
        editor: path.resolve(__dirname, '/css/editor-style.css'),
      },
    },
  }
});