<h2>Create New User</h2>
<form>
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Role: 
        <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </label><br>
    <button type="submit">Create User</button>
</form>
