<template>
  <div class="company-info">
    <h5 class="section-title">Sobre a empresa</h5>
    <p class="description">{{ description }}</p>
  </div>
</template>

<script>
export default {
  props: {
    description: String
  }
}
</script>

<style scoped>
.company-info {
  padding: 24px;
  background-color: #fafafa;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  margin-bottom: 24px;
  transition: all 0.3s ease;
  height: auto;
}

.company-info:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.section-title {
  font-size: 1.25rem;
  font-weight: 600;
  color: #333;
  margin-top: 5px;
  margin-bottom: 12px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.description {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  text-align: justify;
  margin-bottom: 20px;
}

.description::first-letter {
  font-size: 1.2rem;
  font-weight: bold;
  color: #007bff;
}

</style>
