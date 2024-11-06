import { defineStore } from 'pinia';
import axios from 'axios';

export const useFileStore = defineStore('file', {
  state: () => ({
    cvFile: null,
  }),
  actions: {
    fileAdded(files) {
      // Checks if a file has been added
      if (files.length > 0) {
        this.cvFile = files[0];
        console.log('File added:', this.cvFile);
      } else {
        this.cvFile = null;
      }
    },

    async uploadFile() {
      if (!this.cvFile) {
        console.log('No file to upload.');
        return;
      }

      const formData = new FormData();
      formData.append('file', this.cvFile);

      try {
        const response = await axios.post('/api/upload', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });
        console.log('File uploaded successfully:', response.data);
      } catch (error) {
        console.error('Error uploading file:', error);
      }
    },

    async fetchFile() {
      try {
        const response = await axios.get('/api/file', {
          responseType: 'blob',
        });

        this.cvFile = response.data;
        console.log('File fetched successfully:', response.data);
      } catch (error) {
        console.error('Error fetching file:', error);
      }
    },
  },
});
