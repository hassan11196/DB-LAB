// Quse 1
db.restaurants.find({})
   .sort({_id:-1})
   .limit(100)


//   Ques 2
db.restaurants.find({},{_id:1,name:1,borough:1,cuisine:1});
   
// Ques 3
db.restaurants.find({},{_id:0,name:1,borough:1,cuisine:1});

// Ques 4
db.restaurants.find({},{_id:0,name:1,borough:1,cuisine:1, "address.zipcode":1});

// Ques 5
db.restaurants.find({'borough':"Bronx"})

// Ques 6
 db.restaurants.find({'borough':"Bronx"}).limit(5)
 
//  Ques 7
db.restaurants.find({'grades.score':{$gt:90}}).limit(5)

// Ques 8
db.restaurants.find({$and:[{'grades.score':{$lt:80}},{'grades.score':{$lt:100}}]}).limit(5) 
 
// Ques 9
db.restaurants.find({'address.coord[0]':{$gt:-95.754168}}).limit(5)
 
//  Ques 10
db.restaurants.find({$and:[{'borough':"Bronx"},{$or:[{cuisine:"Chinese"},{cuisine:"American"}]}]})