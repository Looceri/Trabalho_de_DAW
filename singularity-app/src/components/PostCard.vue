<template>
  <q-card class="post-card">
    <q-card-section>
      <div class="post-title">{{ title }}</div>
      <p class="post-description">{{ description }}</p>
    </q-card-section>
    <q-card-section>
      <q-img :src="image" class="post-image" contain />
      <div class="actions">
        <q-btn flat icon="favorite_border" label="12" class="icon-btn"/>
        <q-btn flat icon="chat_bubble_outline" label="2" class="icon-btn"/>
      </div>
    </q-card-section>
  </q-card>
</template>

<script>
export default {
  props: {
    title: String,
    description: String,
    image: String
  }
}
</script>

<style scoped>
.post-card {
  margin: 16px;
  border-radius: 12px;
  overflow: hidden;
}

.post-title {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 8px;
}

.post-description {
  font-size: 14px;
  color: #666;
}

.post-image {
  width: 100%;
  height: auto;
  border-radius: 8px;
  margin-top: 12px;
}

.actions {
  display: flex;
  justify-content: space-between;
  margin-top: 8px;
}

.icon-btn {
  color: #999;
}
</style>
