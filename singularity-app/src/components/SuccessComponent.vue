<template>
  <q-page padding style="min-height: fit-content;">
    <div class="q-pa-md">
      <!-- Uploaded File Display -->
      <q-card class="q-mb-md uploaded-card">
        <q-card-section class="file-section">
          <q-icon name="picture_as_pdf" color="red" size="50px" />
          <div class="file-info">
            <div class="file-name">Jamet Kudasi – CV - UI/UX Designer</div>
            <div class="file-details text-subtitle2">867 Kb • 14 Fev 2024 às 11:30</div>
          </div>
        </q-card-section>
      </q-card>

      <!-- Success Message -->
      <div class="q-mb-md" style="border: 0;">
        <q-card-section class="text-center" >
          <div class="icon-container q-mb-md">
          <q-img
            src="../assets/ilustrations/file_update_sucess.svg"
            class="sucess-image"

          />
          </div>
          <div class="text-secondary text-h6">Sucesso</div>
          <p>Parabéns, sua candidatura foi enviada!</p>
        </q-card-section>
      </div>

      <!-- Action Buttons -->
      <q-btn
        label="Encontre outro trabalho similar"
        color="blue"
        class="q-mb-md action-btn"
      />
      <q-btn
        label="De volta para casa"
        color="primary"
        class="action-btn"
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

.sucess-image{
height: 10em;
width: 10em;
}

.file-info {
  margin-left: 16px;
}

.file-name {
  font-weight: bold;
  font-size: medium;
}

.file-details {
  font-size: small;
  color: #666;
}

.success-card {
  border-color: #c8e6c9;
}

.icon-container {
  display: flex;
  justify-content: center;
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
