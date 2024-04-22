import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  server: {
    proxy: {
      '/api': 'http://localhost', // Adjust as needed for API requests to Laravel
    }
  },
  root: './',
  build: {
    outDir: '../../public/react',
    emptyOutDir: true,
  }
});
