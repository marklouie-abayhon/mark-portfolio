import { defineConfig } from 'vite';

export default defineConfig({
  root: 'resources', // The folder where your assets are
  build: {
    outDir: '../public/build', // Output location for the build files
    emptyOutDir: true,
    manifest: true, // Generates a manifest file
  },
  server: {
    proxy: {
      '/': 'http://localhost', // This ensures the correct URL when running in development
    },
  },
});
