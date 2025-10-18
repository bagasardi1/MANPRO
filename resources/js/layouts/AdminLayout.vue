<template>
  <div>
    <nav class="bg-dark text-white p-3">
      <router-link to="/" class="me-3 text-white">🏠 Dashboard</router-link>
      <router-link to="/produk" class="me-3 text-white">📦 Produk</router-link>
      <router-link to="/kategori" class="me-3 text-white">🗂️ Kategori</router-link>
    </nav>

    <main class="container mt-4">
      <router-view />
    </main>
  </div>
</template>

<script setup>
</script>

<style>
body {
  background-color: #f5f6fa;
  font-family: "Inter", sans-serif;
}
</style>
