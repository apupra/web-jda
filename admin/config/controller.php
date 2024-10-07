<?php

// Fungsi untuk melakukan query select data
function query($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Fungsi untuk membuat kategori baru
function store_category($data)
{
    global $db;

    $title = sanitize($data['title']);
    $slug = sanitize($data['slug']);

    // Tidak aman
    // $query = "INSERT INTO categories (title, slug) VALUES ('$title', '$slug')";
    // mysqli_query($db, $query);

    // Aman = query dengan prepare statement
    $stmt = $db->prepare("INSERT INTO categories (title, slug) VALUES (?, ?)");
    $stmt->bind_param('ss', $title, $slug);
    $stmt->execute();

    return $stmt->affected_rows; 
}

// Fungsi untuk menghapus kategori
function delete_category($id)
{
    global $db;

    $stmt = $db->prepare("DELETE FROM categories WHERE id_category = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();

    return $stmt->affected_rows;
}

// Fungsi untuk mengupdate kategori
function update_category($id_category, $title, $slug) {
    global $db;

    // Buat query untuk update data category
    $id_category = (int)$id_category;
    $title = sanitize($title);
    $slug = sanitize($slug);

    $stmt = $db->prepare("UPDATE categories SET 
                            title = ?, 
                            slug = ? 
                          WHERE id_category = ?");
    $stmt->bind_param('ssi', $title, $slug, $id_category);
    $stmt->execute();

    // Cek berapa baris yang terpengaruh
    return $stmt->affected_rows;
}

// Fungsi untuk menyimpan film baru
function store_film ($data){
    global $db;

    $url = sanitize($data['url']);
    $title = sanitize($data['title']);
    $slug = sanitize($data['slug']);
    $description = sanitize($data['description']);
    $release_date = sanitize($data['release_date']);
    $studio = sanitize($data['studio']);
    $category_id = sanitize($data['category_id']);
    
    $query = "INSERT INTO films (url, title, slug, description, release_date, studio, category_id) VALUES ('$url', '$title', '$slug', '$description', '$release_date', '$studio', '$category_id')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi untuk mengupdate film
function update_film($id_film, $data) {
    global $db;

    $title = sanitize($data['title']);
    $slug = sanitize($data['slug']);
    // Tambahkan field lain sesuai kebutuhan

    $stmt = $db->prepare("UPDATE films SET title = ?, slug = ? WHERE id_film = ?");
    $stmt->bind_param('ssi', $title, $slug, $id_film);
    $stmt->execute();

    return $stmt->affected_rows;
}


// Fungsi untuk menghapus film
function delete_film($id_film) {
    global $db;

    $stmt = $db->prepare("DELETE FROM films WHERE id_film = ?");
    $stmt->bind_param('i', $id_film); // Gunakan $id_film
    $stmt->execute();

    return $stmt->affected_rows;
}


// Fungsi untuk menyimpan user baru
function store_user($data)
{
    global $db;

    $username = sanitize($data['username']);
    $email = sanitize($data['email']);
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $role = sanitize($data['role']); // Sanitize role input

    $stmt = $db->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        error_log("Prepare failed: " . $db->error);
        return false;
    }

    $stmt->bind_param("ssss", $username, $email, $password, $role);
    $stmt->execute();

    return $stmt->affected_rows; 
}

function delete_user($id_user)
{
    global $db;

    $stmt = $db->prepare("DELETE FROM users WHERE id_user = ?");
    if (!$stmt) {
        error_log("Prepare failed: " . $db->error);
        return false; // Kembali false jika gagal menyiapkan statement
    }

    $stmt->bind_param('i', $id_user);
    $stmt->execute();

    return $stmt->affected_rows; // Kembalikan jumlah baris yang terpengaruh
}
function update_user($id_user, $username, $email, $role) {
    global $db;

    $stmt = $db->prepare("UPDATE users SET username = ?, email = ?, role = ? WHERE id_user = ?");
    if (!$stmt) {
        error_log("Prepare failed: " . $db->error);
        return false;
    }

    $stmt->bind_param("sssi", $username, $email, $role, $id_user);
    $stmt->execute();

    return $stmt->affected_rows; // Kembalikan jumlah baris yang terpengaruh
}

