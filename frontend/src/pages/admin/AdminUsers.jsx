import { useState } from "react";

export default function Users() {
  const [users, setUsers] = useState([
    { id: 1, name: "Eca", email: "eca@gmail.com" },
    { id: 2, name: "Dinda", email: "dinda@gmail.com" },
  ]);

  const [showModal, setShowModal] = useState(false);
  const [isEdit, setIsEdit] = useState(false);
  const [currentUser, setCurrentUser] = useState({
    id: null,
    name: "",
    email: "",
  });

  const [deleteId, setDeleteId] = useState(null);

  // OPEN CREATE
  const handleCreate = () => {
    setIsEdit(false);
    setCurrentUser({ id: null, name: "", email: "" });
    setShowModal(true);
  };

  // OPEN EDIT
  const handleEdit = (user) => {
    setIsEdit(true);
    setCurrentUser(user);
    setShowModal(true);
  };

  // SAVE (CREATE / UPDATE)
  const handleSave = () => {
    if (isEdit) {
      setUsers(
        users.map((u) =>
          u.id === currentUser.id ? currentUser : u
        )
      );
    } else {
      setUsers([
        ...users,
        { ...currentUser, id: Date.now() },
      ]);
    }
    setShowModal(false);
  };

  // DELETE
  const handleDelete = () => {
    setUsers(users.filter((u) => u.id !== deleteId));
    setDeleteId(null);
  };

  return (
    <div style={{ padding: "20px" }}>
      <h2>Users Management</h2>

      <button onClick={handleCreate}>+ Add User</button>

      {/* TABLE */}
      <table border="1" cellPadding="10" style={{ marginTop: "20px", width: "100%" }}>
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          {users.map((user, index) => (
            <tr key={user.id}>
              <td>{index + 1}</td>
              <td>{user.name}</td>
              <td>{user.email}</td>
              <td>
                <button onClick={() => handleEdit(user)}>Edit</button>
                <button onClick={() => setDeleteId(user.id)} style={{ marginLeft: "10px" }}>
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>

      {/* MODAL CREATE / EDIT */}
      {showModal && (
        <div style={overlay}>
          <div style={modal}>
            <h3>{isEdit ? "Edit User" : "Add User"}</h3>

            <input
              placeholder="Name"
              value={currentUser.name}
              onChange={(e) =>
                setCurrentUser({ ...currentUser, name: e.target.value })
              }
            />
            <br /><br />

            <input
              placeholder="Email"
              value={currentUser.email}
              onChange={(e) =>
                setCurrentUser({ ...currentUser, email: e.target.value })
              }
            />
            <br /><br />

            <button onClick={handleSave}>Save</button>
            <button onClick={() => setShowModal(false)}>Cancel</button>
          </div>
        </div>
      )}

      {/* MODAL DELETE */}
      {deleteId && (
        <div style={overlay}>
          <div style={modal}>
            <h3>Confirm Delete</h3>
            <p>Are you sure?</p>

            <button onClick={handleDelete}>Yes</button>
            <button onClick={() => setDeleteId(null)}>No</button>
          </div>
        </div>
      )}
    </div>
  );
}

const overlay = {
  position: "fixed",
  top: 0,
  left: 0,
  width: "100%",
  height: "100%",
  background: "rgba(0,0,0,0.5)",
};

const modal = {
  background: "white",
  padding: "20px",
  width: "300px",
  margin: "100px auto",
};