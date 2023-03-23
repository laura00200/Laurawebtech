/*class Student {
    constructor(name, email, progress) {
      this.name = name;
      this.email = email;
      this.progress = progress;
    }
  }
  let students = [];
  let student1 = new Student("John Smith", "john.smith@L-tech.com", 50);
  let student2 = new Student("Jane Doe", "jane.doe@L-tech.com", 75);

 students.push(student1);
 students.push(student2);



let student3 = new Student("Emily Johnson", "emily.johnson@L-tech.com", 60);
let student4 = new Student("Samantha Brown", "samantha.brown@L-tech.com", 80);
students.push(student3);
 students.push(student4);


let student5 = new Student("Michael Lee", "michael.lee@L-tech.com", 85);
let student6 = new Student("Samantha Davis", "samantha.davis@L-tech.com", 70);
let student7 = new Student("James Smith", "james.smith@L-tech.com", 95);
let student8 = new Student("Sarah Jones", "sarah.jones@L-tech.com", 80);
let student9 =  new Student("David Kim", "david.kim@L-tech.com", 90);
let student10 = new Student("Jessica Martinez", "jessica.martinez@L-tech.com", 75);
let student11 = new Student("Daniel Brown", "daniel.brown@L-tech.com", 85);
let student12= new Student("Olivia Wilson", "olivia.wilson@L-tech.com", 65);
let student13 = new Student("Christopher Lee", "christopher.lee@L-tech.com", 75);
let student14 =  new Student("Emma Rodriguez", "emma.rodriguez@L-tech.com", 80);
let student15 = new Student("Joshua Garcia", "joshua.garcia@L-tech.com", 90);
let student16 =  new Student("Isabella Taylor", "isabella.taylor@L-tech.com", 85);
let student17 =  new Student("Alexander Hernandez", "alexander.hernandez@L-tech.com", 95);
let student18 =  new Student("Madison Thomas", "madison.thomas@L-tech.com", 70);
let student19 =  new Student("Anthony Nguyen", "anthony.nguyen@L-tech.com", 75);
let student20 =  new Student("Grace Robinson", "grace.robinson@L-tech.com", 80);
let student21 =  new Student("Ethan Wright", "ethan.wright@L-tech.com", 90);
let student22 =  new Student("Chloe Perez", "chloe.perez@L-tech.com", 75);
let student23 =  new Student("Benjamin Davis", "benjamin.davis@L-tech.com", 85);

students.push(student5);
students.push(student6);
students.push(student7);
students.push(student8);
students.push(student9);
students.push(student10);
students.push(student11);
students.push(student12);
students.push(student13);
students.push(student14);
students.push(student15);
students.push(student16);
students.push(student17);
students.push(student18);
students.push(student19);
students.push(student20);
let studentsList = document.getElementById("students-list");

for (let i = 0; i < students.length; i++) {
  let studentListItem = document.createElement("li");
  let studentInfo = students[i].name + " (" + students[i].email + ") - Progress: " + students[i].progress + "%";
  studentListItem.textContent = studentInfo;
  studentsList.appendChild(studentListItem);
}
*/
let myForm = document.getElementById("myForm");
myForm.addEventListener("submit", function(event) {
  event.preventDefault();
  let formData = new FormData(myForm);
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "contancts.php", true);
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send(formData);
});
