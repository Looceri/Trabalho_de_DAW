import { defineStore } from 'pinia';
import axios from 'axios';

export const useFileStore = defineStore('file', {
  state: () => ({
    cvFile: null,  // Store the file data
    uploadStatus: null,  // To store the status of the upload (optional)
  }),

  actions: {
    // Called when a file is added to the uploader
    fileAdded(files) {
      if (files.length > 0) {
        this.cvFile = files[0];  // Store the first file
        console.log('File added:', this.cvFile);
      } else {
        this.cvFile = null;
      }
    },

    // Upload the file to the server
    async uploadFile() {
      if (!this.cvFile) {
        console.log('No file to upload.');
        return;
      }

      const formData = new FormData();
      formData.append('file', this.cvFile);

      try {
        const response = await axios.post('http://localhost:8000/api/upload', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });

        // If the file is uploaded successfully, update state
        console.log('File uploaded successfully:', response.data);
        this.cvFile = response.data.file;  // Update the state with the uploaded file's details
        this.uploadStatus = 'File uploaded successfully';
      } catch (error) {
        console.error('Error uploading file:', error);
        this.uploadStatus = 'Failed to upload file';  // Set failure status
      }
    },

    // Fetch a file from the server (if you want to retrieve and display it)
    async fetchFile(fileId) {
      try {
        const response = await axios.get(`http://localhost:8000/api/files/${fileId}`, {
          responseType: 'blob',  // Expecting the file as a blob
        });

        // Create an object URL to display or download the file
        const fileUrl = URL.createObjectURL(response.data);
        this.cvFile = fileUrl;  // Save the file URL to the state
        console.log('File fetched successfully:', fileUrl);
      } catch (error) {
        console.error('Error fetching file:', error);
      }
    },

    // Optionally, a method to remove the file from state
    clearFile() {
      this.cvFile = null;
      this.uploadStatus = null;
    }
  },
});
