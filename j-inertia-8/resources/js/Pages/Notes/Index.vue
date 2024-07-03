<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-col-3 md:gap-6">
                    <div class="md-col-span-1">
                        <div class="p3-4 sm:px0">
                            <h3>Listado de notas</h3>
                            <p class="text-sm text-gray-600">Toma el resuistro y ejecuta cualquier función</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
