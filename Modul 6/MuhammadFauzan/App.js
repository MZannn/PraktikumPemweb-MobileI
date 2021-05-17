/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

 import React, {Component} from 'react';
 import{
 Container,
 Header,
 Content,
 Left,
 Right,
 Body,
 Icon,
 Text,
 ListItem,
 Item,
 Input,
 } from 'native-base';
 let helperArray = require('./nama.json');
 export default class App extends Component {
   constructor(props){
     super(props);
     this.state = {
       allUsers: helperArray,
       usersFiltered:helperArray,
     };
   }
 
 searchUser(textToSearch) {
   this.setState({
     usersFiltered: this.state.allUsers.filter(i =>
       i.username.toLowerCase().includes(textToSearch.toLowerCase()),
         ),
     });
   }
 
   render() {
     return (
       <Container>
         <Header searchBar rounded>
          <Item>
            <Icon name="search"/> 
            <Input 
               placeholder="Search User" 
               onChangeText={text => {
               this.searchUser(text);
              }}
             />
          </Item>
         </Header>
         <Content>
           {this.state.usersFiltered.map((item,index)=>(
             <ListItem>
             <Body>
             <Text>Nama : {item.name}</Text>
             <Text>Email : {item.email}</Text>
             <Text>Username : {item.username}</Text>
             <Text>Password : {item.password}</Text>
             </Body>
             <Right />
             </ListItem>
           ))}
             </Content>
             </Container>
     );
   }
 }