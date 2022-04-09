

import java.util.Scanner;
public class Students {
    private String photoUrl;
    private String name;
    private String identification;
    private String absences;

    public String getPhotoUrl() {
        return photoUrl;
    }

    public void setPhotoUrl(String photoUrl) {
        this.photoUrl = photoUrl;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getIdentification() {
        return identification;
    }

    public void setIdentification(String identification) {
        this.identification = identification;
    }

    public String getAbsences() {
        return absences;
    }

    public void setAbsences(String absences) {
        this.absences = absences;
    }





    public static void main(String[] arg) {
        Scanner inputData=new Scanner(System.in);
        int studentNumber;

        System.out.println(" Enter the students number ");
        studentNumber= inputData.nextInt();
        Students [] students=new Students[studentNumber];

        for(int i=0;i<students.length;i++){
            Students user=new Students();

            System.out.println("Enter the photo URL of student : ");
            user.setPhotoUrl(inputData.nextLine());

            System.out.println("Enter the student's name :");
            user.setName(inputData.nextLine());

            System.out.println("Enter the  student's Identification : ");
            user.setIdentification(inputData.nextLine());

            System.out.println(" Enter number of absences ");
            user.setAbsences(inputData.nextLine());
            students[i]=user;
        }






    }


}

