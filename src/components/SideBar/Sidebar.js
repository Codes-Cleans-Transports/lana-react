import React from 'react';
import * as AiIcons from 'react-icons/ai';
import { Link } from 'react-router-dom';
import './SideBar.css';
import { IconContext } from 'react-icons';

function SideBar() {

  return (
    <>
      <IconContext.Provider value={{ color: '#fff' }}>
        <nav className='nav-menu active'>
          <ul className='nav-menu-items'>
            <li className='nav-text'>
                <Link exact to="/">
                <AiIcons.AiFillHome />
                <span>Home</span>
                </Link>
            </li>

            <li className='nav-text'>
                <Link exact to="/dashboard">
                <AiIcons.AiOutlineDashboard />
                    <span>Dashboard</span>
                </Link>
            </li>
          </ul>
        </nav>
      </IconContext.Provider>
    </>
  );
}

export default SideBar;