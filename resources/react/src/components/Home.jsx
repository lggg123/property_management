import React from 'react'

function Home() {
    return (
        <div className="p-5">
        <h1 className="text-2xl font-bold text-gray-700 mb-4">Dashboard</h1>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div className="bg-white p-4 shadow rounded">
            <h2 className="font-semibold text-xl">Requests</h2>
            {/* Statistics Component Here */}
          </div>
          <div className="bg-white p-4 shadow rounded col-span-2">
            <h2 className="font-semibold text-xl">Sales Graph</h2>
            {/* Sales Graph Component Here */}
          </div>
        </div>
        {/* More Widgets can be added here */}
      </div>
    );
  }
  
  export default Home;