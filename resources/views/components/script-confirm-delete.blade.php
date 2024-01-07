<div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $('form.form-del').submit(function(e){
                if (confirm('Вы действительно хотите удалить?')) {
                    return true;
                } else {
                    e.preventDefault();
                    return false;
                }
            });
        });
    </script>
</div>