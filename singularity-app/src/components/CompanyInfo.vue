<template>
  <div class="company-info">
    <h3>Sobre a empresa</h3>
    <p>{{ description }}</p>
    <a :href="website" target="_blank" class="website-link">{{ website }}</a>
    <ul class="details-list">
      <li>Indústria: {{ industry }}</li>
      <li>Tamanho: {{ size }}</li>
      <li>Sede: {{ headquarters }}</li>
      <li>Tipo: {{ type }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    description: String,
    website: String,
    industry: String,
    size: String,
    headquarters: String,
    type: String
  }
}
</script>

<style scoped>
.company-info {
  padding: 16px;
}

.website-link {
  color: #ff5722;
  text-decoration: none;
  font-weight: bold;
}

.details-list {
  padding: 0;
  list-style: none;
  margin-top: 8px;
  font-size: 14px;
}

.details-list li {
  margin-top: 4px;
}
</style>
