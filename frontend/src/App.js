import { BrowserRouter, Routes, Route } from "react-router-dom";
import { useState } from "react";
import Users from "./pages/admin/AdminUsers";

function Register() {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await fetch("http://127.0.0.1:8000/api/register", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          name,
          email,
          password,
          password_confirmation: password, // 🔥 penting
        }),
      });

      const data = await response.json();

      if (response.ok) {
        alert("Register berhasil 🎉");

        // reset form
        setName("");
        setEmail("");
        setPassword("");
      } else {
        console.log("ERROR:", data);

        if (data.errors) {
          const firstError = Object.values(data.errors)[0][0];
          alert(firstError);
        } else {
          alert(data.message || "Register gagal ❌");
        }
      }
    } catch (error) {
      console.error("FETCH ERROR:", error);
      alert("Server tidak terhubung ❌");
    }
  };

  return (
    <div style={styles.container}>
      <div style={styles.card}>
        <h2 style={styles.title}>Register EduWallet</h2>

        <form onSubmit={handleSubmit}>
          <input
            style={styles.input}
            type="text"
            placeholder="Nama"
            value={name}
            onChange={(e) => setName(e.target.value)}
            required
          />

          <input
            style={styles.input}
            type="email"
            placeholder="Email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
            required
          />

          <input
            style={styles.input}
            type="password"
            placeholder="Password (min 8 karakter)"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            required
          />

          <button style={styles.button} type="submit">
            Register
          </button>
        </form>
      </div>
    </div>
  );
}

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Register />} />
        <Route path="/admin/users" element={<Users />} />
      </Routes>
    </BrowserRouter>
  );
}

const styles = {
  container: {
    height: "100vh",
    display: "flex",
    justifyContent: "center",
    alignItems: "center",
    background: "#f4f6f8",
  },
  card: {
    background: "#fff",
    padding: "30px",
    borderRadius: "12px",
    width: "300px",
    boxShadow: "0 5px 15px rgba(0,0,0,0.1)",
  },
  title: {
    textAlign: "center",
    marginBottom: "20px",
  },
  input: {
    width: "100%",
    padding: "10px",
    marginBottom: "15px",
    borderRadius: "8px",
    border: "1px solid #ccc",
  },
  button: {
    width: "100%",
    padding: "10px",
    background: "#4CAF50",
    color: "#fff",
    border: "none",
    borderRadius: "8px",
    cursor: "pointer",
  },
};

export default App;