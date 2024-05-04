// src/components/Sidebar.jsx
import React from 'react';
import { Link } from 'react-router-dom';

function Sidebar() {
    return (
        <div className="h-full w-64 bg-gray-800 text-white">
            <div className="p-5 text-xl font-bold">My Dashboard</div>
            <ul>
                <li className="p-4 hover:bg-gray-700">
                    <Link to="/">Home</Link>
                </li>
                <li className="p-4 hover:bg-gray-700">
                    <Link to="/dashboard/stats">Rents</Link>
                </li>
                <li className="p-4 hover:bg-gray-700">
                    <Link to="/dashboard/reports">Reports</Link>
                </li>
                <li className="p-4 hover:bg-gray-700">
                    <Link to="/dashboard/reports">Requests</Link>
                </li>
                <li className="p-4 hover:bg-gray-700">
                    <Link to="/dashboard/reports">Payments</Link>
                </li>
                <li className="p-4 hover:bg-gray-700">
                    <Link to="/dashboard/settings">Settings</Link>
                </li>
            </ul>
        </div>
    );
}

export default Sidebar;
