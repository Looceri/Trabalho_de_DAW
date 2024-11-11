<template>
  <q-card class="job-card">
    <q-card-section>
      <div class="job-title">{{ title }}</div>
      <div class="job-location">{{ location }}</div>
      <div class="job-type">{{ type }}</div>
    </q-card-section>
    <q-card-section>
      <div class="tags">
        <q-chip v-for="tag in tags" :key="tag" outline color="primary" class="tag">{{ tag }}</q-chip>
      </div>
      <div class="salary">Salário: {{ salary }}</div>
    </q-card-section>
  </q-card>
</template>

<script>
export default {
  props: {
    title: String,
    location: String,
    type: String,
    tags: Array,
    salary: String
  }
}
</script>

<style scoped>
.job-card {
  margin: 16px;
  padding: 12px;
  border-radius: 12px;
}

.job-title {
  font-weight: bold;
  font-size: 16px;
}

.job-location, .job-type {
  font-size: 14px;
  color: #666;
  margin-top: 4px;
}

.tags {
  margin-top: 12px;
}

.tag {
  margin-right: 4px;
}

.salary {
  font-size: 16px;
  font-weight: bold;
  color: #ff5722;
  margin-top: 8px;
}
</style>
