<x-layout title="Registrar">
    <form method="post">
        @csrf

        <div class="form-group">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button href="{{ route('users.store') }}" class="btn btn-secondary mt-3">
            Registrar
        </button>
    </form>
</x-layout>