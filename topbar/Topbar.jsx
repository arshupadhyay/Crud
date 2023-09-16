import { Link } from 'react-router-dom';
import './Topbar.css';

export default function Topbar() {
  const user = true;
  return (
    <div className='top' style={{}}>
      <div className="topLeft">
      <i className="link2 topIcon fa-brands fa-square-facebook"></i>
      <i className="link2 topIcon fa-brands fa-square-x-twitter"></i>
      <i className="link2 topIcon fa-brands fa-square-pinterest"></i>
      <i className="link2 topIcon fa-brands fa-square-instagram"></i>
      </div>
      <div className="topCenter">
        <ul className="topList">
            <li className="topListItem">
              <Link className="link" to="/">HOME</Link>
            </li>
            <li className="topListItem">
            <Link className="link" to="/about">ABOUT</Link></li>
            <li className="topListItem">
            <Link className="link" to="/contact">CONTACT</Link>
            </li>
            <li className="topListItem">
            <Link className="link" to="/write">WRITE</Link>
            </li>
            <li className=" link topListItem">
              {user && "LOGOUT"}
            </li>
        </ul>
      </div>
      <div className="topRight">
        {
          user ? (
            <img className='topImg' src='https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80' alt=''/>
          ) : (
            <ul className='topList'>
              <li className='topListItem'>
                 <Link className="link" to="/login">LOGIN</Link>
              </li>

              <li className='topListItem'>
                <Link className="link" to="/register">REGISTER</Link>
              </li>
            
            </ul>
          )
        }
       
        <i className=" link topSearchIcon fa-solid fa-magnifying-glass"></i>
        
          <Link className='settingsLink' to="/settings"><i className="link gear fa-solid fa-gear" ></i></Link> 
      </div>
    </div>
  );
}
