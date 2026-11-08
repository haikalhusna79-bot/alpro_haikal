import java.time.localdate;
import java.time.format.datetimeformatter;
import java.util.locale;

public class belajar {
    public static void main(string[] args) {
        localdate hari = localdate.now();
        datetimeformatter fmt = datetimeformatter.ofpattern(
            "eeee, dd mmmm yyyy",
            locale.forlanguangetag("id-ID"));
        system.out.println("hari ini " + hari.format(fmt)
            + ", saya belajar library di java");
    } 
