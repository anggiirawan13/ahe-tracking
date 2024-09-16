<button type="button" class="btn btn-outline-danger" onclick="destroy('{{ $actionUrl }}')">
    <i class="bi bi-trash3-fill"></i>
</button>

<script>
    async function destroy(url) {
        await fetch(url, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
            })
            .then((resp) => window.location.reload())
            .catch((err) => alert('failed'))
    }
</script>