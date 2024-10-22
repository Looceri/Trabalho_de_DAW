<template>
  <q-page padding>
    <div class="q-pa-md">
      <!-- Uploaded File Display -->
      <q-card class="q-mb-md uploaded-card">
        <q-card-section class="file-section">
          <q-icon name="picture_as_pdf" color="red" size="50px" />
          <div class="file-info">
            <div class="file-name text-h6">Jamet Kudasi – CV - UI/UX Designer</div>
            <div class="file-details text-subtitle2">867 Kb • 14 Fev 2024 às 11:30</div>
          </div>
        </q-card-section>
      </q-card>

      <!-- Success Message -->
      <q-card class="q-mb-md success-card">
        <q-card-section class="text-center">
          <div class="icon-container q-mb-md">
            <q-icon name="check_circle" size="50px" color="green" />
          </div>
          <div class="success-text text-h6">Sucesso</div>
          <p>Parabéns, sua candidatura foi enviada!</p>
        </q-card-section>
      </q-card>

      <!-- Action Buttons -->
      <q-btn
        label="Encontre outro trabalho similar"
        color="blue"
        class="q-mb-md action-btn"
        glossy
      />
      <q-btn
        label="De volta para casa"
        color="orange"
        class="action-btn"
        glossy
      />
    </div>
  </q-page>
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>

<style scoped>
.q-card {
  border: 1px solid #ddd;
  border-radius: 8px;
}

.uploaded-card {
  display: flex;
  align-items: center;
  padding: 16px;
  background-color: #f9f9f9;
}

.file-section {
  display: flex;
  align-items: center;
}

.file-info {
  margin-left: 16px;
}

.file-name {
  font-weight: bold;
}

.file-details {
  color: #666;
}

.success-card {
  background-color: #e8f5e9;
  border-color: #c8e6c9;
}

.icon-container {
  display: flex;
  justify-content: center;
}

.success-text {
  color: green;
}

.action-btn {
  width: 100%;
  border-radius: 8px;
  font-weight: bold;
}

.action-btn:first-of-type {
  margin-bottom: 12px;
}
</style>
