<template>
    <button @click="$emit('hello', str)" v-text="str"></button>
</template>

<script>

export default {
    name: 'FunButton',
    props: {
        str: String
    }
}

</script>


<style scoped>

button {
    background: dodgerblue;
    color: white;
    padding: 0 8px;
    line-height: 40px;
    border-radius: 5px;
    margin: 10px;
    border: 1px solid white;
    cursor: pointer;
}
   
</style>