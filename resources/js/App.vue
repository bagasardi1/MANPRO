<template>
  <div class="min-h-screen bg-gray-50 text-gray-800">
    <header class="p-4 bg-pink-500 text-white flex justify-between items-center">
      <h1 class="text-xl font-bold">🍰 Shinta Bakery</h1>
      <nav class="space-x-4">
        <router-link to="/" class="hover:underline">Dashboard</router-link>
        <router-link to="/produk" class="hover:underline">Produk</router-link>
      </nav>
    </header>

    <main class="p-6">
      <router-view />
    </main>
  </div>
</template>

<script setup>
</script>
